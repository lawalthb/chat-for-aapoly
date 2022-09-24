<?php 

namespace App\Exports;
use App\Models\Users;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class UsersListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Users::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Id',
			'Fullname',
			'Matric',
			'Phone',
			'Email',
			'Status',
			'Ip Address',
			'Language Id',
			'Department',
			'Date Join'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->id,
			$record->fullname,
			$record->matric,
			$record->phone,
			$record->email,
			$record->status,
			$record->ip_address,
			$record->language_id,
			$record->department_id,
			$record->date_join
        ];
    }
}
