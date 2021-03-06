<?php

namespace IXP\Policies;

/*
 * Copyright (C) 2009 - 2020 Internet Neutral Exchange Association Company Limited By Guarantee.
 * All Rights Reserved.
 *
 * This file is part of IXP Manager.
 *
 * IXP Manager is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, version v2.0 of the License.
 *
 * IXP Manager is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License v2.0
 * along with IXP Manager.  If not, see:
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

use Entities\User as UserEntity;

use Illuminate\Auth\Access\HandlesAuthorization;

use IXP\Models\DocstoreLog;

class DocstoreLogPolicy
{
    use HandlesAuthorization;

    public function before( $user, $ability )
    {
        if ( $user->isSuperUser() ) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any docstore logs.
     *
     * @param  UserEntity  $user
     *
     * @return mixed
     */
    public function viewAny( UserEntity $user )
    {
        //
    }

    /**
     * Determine whether the user can view the docstore log.
     *
     * @param  UserEntity   $user
     * @param  DocstoreLog  $docstoreLog
     *
     * @return mixed
     */
    public function view( UserEntity $user, DocstoreLog $docstoreLog)
    {
        //
    }

    /**
     * Determine whether the user can create docstore logs.
     *
     * @param  UserEntity  $user
     *
     * @return mixed
     */
    public function create( UserEntity $user)
    {
        //
    }

    /**
     * Determine whether the user can update the docstore log.
     *
     * @param  UserEntity  $user
     * @param  DocstoreLog  $docstoreLog
     * @return mixed
     */
    public function update( UserEntity $user, DocstoreLog $docstoreLog )
    {
        //
    }

    /**
     * Determine whether the user can delete the docstore log.
     *
     * @param  UserEntity   $user
     * @param  DocstoreLog  $docstoreLog
     * @return mixed
     */
    public function delete( UserEntity $user, DocstoreLog $docstoreLog )
    {
        //
    }

    /**
     * Determine whether the user can restore the docstore log.
     *
     * @param  UserEntity   $user
     * @param  DocstoreLog  $docstoreLog
     * @return mixed
     */
    public function restore( UserEntity $user, DocstoreLog $docstoreLog )
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the docstore log.
     *
     * @param  UserEntity   $user
     * @param  DocstoreLog  $docstoreLog
     * @return mixed
     */
    public function forceDelete( UserEntity $user, DocstoreLog $docstoreLog )
    {
        //
    }
}
