<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Registration</th>
        <th scope="col">Year of Manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">Owner</th>
        <th scope="col">Brand</th>
        <th scope="col">Created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <th scope="row">{{$object->id}}</th>
            <td>{{$object->registration}}</td>
            <td>{{$object->year_of_manufacture}}</td>
            <td>{{$object->color}}</td>
            <td>
                <p>Owner id {{$object->owner->id}},Name {{$object->owner->name}},
                    birth date {{$object->birth_date}},
                    wallet money {{$object->wallet_money}},</p>
                <p>
                    Brand id {{$object->brand->id}},Name {{$object->brand->name}}
                </p>

            </td>
            <td>{{$object->created_at}}</td>
            <td>{{$object->updated_at}}</td>
        </tr>

    </tbody>
</table>
