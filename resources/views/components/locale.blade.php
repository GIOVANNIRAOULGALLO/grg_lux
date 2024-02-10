<form action="{{route('locale' , $lang )}}" method="POST">
    @csrf
    <button type="submit" class="button-language">
        <span class="flag-icon flag-icon-{{$nation}} mx-2"></span>
    </button>
</form>