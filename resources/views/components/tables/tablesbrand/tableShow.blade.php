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
        <tr>
            <th scope="row">{{$object->id}}</th>
            <td>{{$object->name}}</td>
            <td>
                @foreach($object->cars as $car)
                    <p>Card id {{$car->id}},Card registration {{$car->registration}},
                        Car year {{$car->year_of_manufacture}},
                        Car color {{$car->color}},</p>

                @endforeach
            </td>
            <td>{{$object->created_at}}</td>
            <td>{{$object->updated_at}}</td>
        </tr>
    </tbody>
</table>
