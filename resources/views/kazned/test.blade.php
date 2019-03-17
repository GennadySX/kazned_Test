

<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th>Banner</th>
        <th>Date visit</th>

    </tr>
    </thead>
    <tbody>
    @foreach($data as $val)
        <tr>
            <td>{{$val->bannerName}}</td>
            <td>{{$val->dateShow}}</td>
        </tr>
    @endforeach
    </tbody>
</table>