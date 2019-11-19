<tr>
    <td>{{$record->title}}</td>
    <td>{{$record->price}}</td>
    <td>{{$record->publisher}}</td>
    <td>{{$record->published}}</td>
    <td>
        @foreach ($record->reviews as $review)
            <li>{{$review->body}} ({{$review->name}})</li>
        @endforeach
    </td>
</tr>
