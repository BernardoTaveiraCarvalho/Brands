<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Cars</th>
        <th scope="col">Created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($object as $obj)
        <tr>
            <th scope="row">{{$obj->id}}</th>
            <td>{{$obj->name}}</td>
            <td>
                @foreach($obj->cars as $car)
                    <p>Card id {{$car->id}},Card registration {{$car->registration}},
                        Car year {{$car->year_of_manufacture}},
                        Car color {{$car->color}},</p>

                @endforeach
            </td>
            <td>{{$obj->created_at}}</td>
            <td>{{$obj->updated_at}}</td>
            <td ><button> <a href="{{url('brands/'.$obj->id)}}">Show </a></button>  </td>
        </tr>
    @endforeach
    </tbody>
</table>
