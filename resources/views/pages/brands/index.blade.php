@extends('master.main',['Title'=>'Bernardo','nav'=>array(
    array(
    "title"=> 'Brand',
    "href"=> '/brands',
    ),
    array(
    "href"=> '/cars',
    "title"=> 'Car',
    ),
    array(
    "href"=> '/countries',
    "title"=> 'Country',
    ),
    array(
    "href"=> '/owners',
    "title"=> 'Owner',
    ),

),'active'=>'Brand'])

@section('content')

    @component('components.tables.tablesbrand.tableIndex',['title'=>'Brands','object'=>$brand])
    @endcomponent
@endsection
