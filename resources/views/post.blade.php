<html>
<title>Post List</title>

<head>

</head>

<body>
    <div class="card">
        <div class="row">
            <h1>Post List</h1>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Author name</th>
                    <th>Image</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($post as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td><img src="{{ $item->image }}" width="100" height="100"></td>
                            <td><a href="{{ route('post.delete',$item->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
