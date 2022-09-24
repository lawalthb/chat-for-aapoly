<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admins extends Authenticatable 
{
	use Notifiable;
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'admins';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ['firstname','lastname','email','password','status','admin_type'];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"email",
			"status",
			"admin_type",
			"date_join" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"email",
			"status",
			"admin_type",
			"date_join" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"email",
			"status",
			"admin_type",
			"date_join" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"email",
			"status",
			"admin_type",
			"date_join" 
		];
	}
	

	/**
     * return accountedit page fields of the model.
     * 
     * @return array
     */
	public static function accounteditFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"status",
			"admin_type" 
		];
	}
	

	/**
     * return accountview page fields of the model.
     * 
     * @return array
     */
	public static function accountviewFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"email",
			"status",
			"admin_type",
			"date_join" 
		];
	}
	

	/**
     * return exportAccountview page fields of the model.
     * 
     * @return array
     */
	public static function exportAccountviewFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"email",
			"status",
			"admin_type",
			"date_join" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"firstname",
			"lastname",
			"status",
			"admin_type" 
		];
	}
	

	/**
     * Get current user name
     * @return string
     */
	public function UserName(){
		return $this->email;
	}
	

	/**
     * Get current user id
     * @return string
     */
	public function UserId(){
		return $this->email;
	}
	public function UserEmail(){
		return $this->email;
	}
	

	/**
     * Send Password reset link to user email 
	 * @param string $token
     * @return string
     */
	public function sendPasswordResetNotification($token)
	{
		$this->notify(new \App\Notifications\ResetPassword($token));
	}
}
