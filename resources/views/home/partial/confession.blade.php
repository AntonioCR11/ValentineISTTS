<button class="btn btn-outline-light mb-4" onclick="generateLandingPage()">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
</button>
<p class="m-0 pt-4 title">
    Confess time
</p>

<p class="text-secondary mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, nihil autem? Tenetur quidem nesciunt ab, autem veritatis aliquid ea dolorem rerum odit distinctio deleniti illo quisquam aut. Iste facere cupiditate natus amet expedita facilis obcaecati, blanditiis fuga. Accusantium alias vitae, esse dolorem fugit nobis facere saepe incidunt natus qui? Hic.</p>

<form action="{{route('postConfession')}}" method="POST">
    @csrf
    <div class="row m-0 w-100 mb-2">
        <div class="col p-0 pe-2">
            <input type="text" class="form-control mb-2 p-3" placeholder="Username, can be real/ fake name"  name="username">
        </div>
        <div class="col p-0 ps-2">
            <input type="text" class="form-control mb-2 p-3" placeholder="Recipient, can be initial ;)" name="recipient">
        </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Confession here..." style="height: 100px"></textarea>
    <div class="d-flex align-items-center text-light mb-3">
        <input class="form-check-input me-2" type="checkbox" value="" name="anonymus" id="anonymus">
        <label for="anonymus">Set my username to anonymus/ hide my username</label>
    </div>
    <input class="btn btn-danger w-100 p-3" type="submit" value="Confess!">
</form>


<div class="copyright py-4">
    <p class="m-0 text-light">
        &copy; {{date("Y")}}. BEM Institus Sains dan Teknologi Terpadu Surabaya<br>
    </p>
</div>
