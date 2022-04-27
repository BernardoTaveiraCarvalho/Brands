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

),'active'=>'Owner'])

@section('content')

    @component('components.tables.tablesowners.tableIndex',['title'=>'Owner','object'=>$owner])
    @endcomponent
@endsection
