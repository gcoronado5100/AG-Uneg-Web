<?php
function userCan($userId,$permiso){
    if(DB::table('users')
            ->join('consejo_role_user', 'users.id', '=', 'consejo_role_user.user_id')
            ->join('permiso_role', 'consejo_role_user.role_id', '=', 'permiso_role.role_id')
            ->join('permisos', 'permisos.id', '=', 'permiso_role.permiso_id')
            ->where('users.id',$userId)
            ->where('permisos.nombre', $permiso)
            ->doesntExist()
    ){
        return False;

    }else {
        return True;
    }
}

function userIs($userId,$rol){
    if(DB::table('users')
            ->join('consejo_role_user', 'users.id', '=', 'consejo_role_user.user_id')
            ->join('roles', 'consejo_role_user.id', '=', 'roles.id')
            ->where('users.id',$userId)
            ->where('roles.nombre', $rol)
            ->doesntExist()
    ){
        return False;

    }else {
        return True;
    }
}