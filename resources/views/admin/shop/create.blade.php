<body>
    <p>ショップの作成</p>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="region">地域</label>
            @foreach ($regions as $region)
                <select name="region" id="" size="1">
                    <option value="{{ $region -> region_id }}">{{ $region -> region_name}}</option>
                </select>
            @endforeach
            <label for="prefecture">都道府県</label>
            @foreach ($prefectures as $prefecture)
                <select name="prefecture" id="" size="1">
                    <option value="{{ $prefecture -> prefectures_id }}">{{ $prefecture -> prefectures_name}}</option>
                </select>
            @endforeach
        </div>
    </form>
</body>
</html>