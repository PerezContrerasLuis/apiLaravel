<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{

	public function transform(User $user){

        /*retornomos array con los datos que nosostros requerimos*/
		return [
			'id' => $user->uuid,
			'name' => $user->name,
			'email' => $user->email,
			'created_at' => $user->created_at,
			'updated_at' => $user->updated_at
		];
	}
}