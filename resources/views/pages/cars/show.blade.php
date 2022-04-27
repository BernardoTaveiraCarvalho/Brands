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

),'active'=>'Car'])

@section('content')

    @component('components.tables.tablescars.tableShow',['title'=>'Car','object'=>$car])
    @endcomponent
@endsection
