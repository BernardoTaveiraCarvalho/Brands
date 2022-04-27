<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Registration</th>
        <th scope="col">Year of Manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">Created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($object as $obj)
        <tr>
            <th scope="row">{{$obj->id}}</th>
            <td>{{$obj->registration}}</td>
            <td>{{$obj->year_of_manufacture}}</td>
            <td>{{$obj->color}}</td>
            <td>
                    <p>Owner id {{$obj->owner->id}},Name {{$obj->owner->name}},
                        birth date {{$obj->birth_date}},
                        wallet money {{$obj->wallet_money}},</p>
                <p>
                    Brand id {{$obj->brand->id}},Name {{$obj->brand->name}}
                </p>

            </td>
            <td>{{$obj->created_at}}</td>
            <td>{{$obj->updated_at}}</td>
            <td ><button> <a href="{{url('cars/'.$obj->id)}}">Show </a></button>  </td>
        </tr>
    @endforeach
    </tbody>
</table>


