<table>
    <thead>
        <th>Nickname:</th>
        <th>Record:</th>
    </thead>
    @foreach ($data as $row)
        <tr>
            <td>{{ $row['name'] }}</td>
            <td>{{ !$row['record']?0:$row['record'] }}</td>
        </tr>
    @endforeach
    <tr>
        <th colspan="2"><a href="{{ route('view') }}"><button>Play again</button></a>
        <p>This account only can play one time</p></th>
        
    </tr>
</table>
<style>
    table,th,td{    
        border:2px solid black
    }
    table{
        width: 100%;
    }
    *{
        text-align: center;
    }
</style>