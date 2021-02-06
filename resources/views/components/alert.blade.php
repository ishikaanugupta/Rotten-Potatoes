<div>
    @auth
    <div class="alert alert-success mt-3" role="alert">
        Please add your review above!
    </div>
    @endauth
    @guest
    <div class="alert alert-danger mt-3" role="alert">
        You need to log in to add a review!
    </div>
    @endguest
</div>