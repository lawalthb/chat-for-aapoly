<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Websockets_Statistics_Entries extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'websockets_statistics_entries';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'app_id','peak_connection_count','websocket_message_count','api_message_count'
	];
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"app_id",
			"peak_connection_count",
			"websocket_message_count",
			"api_message_count",
			"created_at",
			"updated_at" 
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
			"app_id",
			"peak_connection_count",
			"websocket_message_count",
			"api_message_count",
			"created_at",
			"updated_at" 
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
			"app_id",
			"peak_connection_count",
			"websocket_message_count",
			"api_message_count",
			"created_at",
			"updated_at" 
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
			"app_id",
			"peak_connection_count",
			"websocket_message_count",
			"api_message_count",
			"created_at",
			"updated_at" 
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
			"app_id",
			"peak_connection_count",
			"websocket_message_count",
			"api_message_count" 
		];
	}
}
