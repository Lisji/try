<div class="reply-form">
    <h4>留言</h4>
    <p>您的電子郵件將不會被公開，姓名及電子郵件為必填欄位。 </p>
    <form action="/post/comment" method="POST">
    
    <div class="row">
        <div class="col-md-6 form-group">
        <input name="name" type="text" class="form-control"  placeholder="姓名*">
        </div>
        <div class="col-md-6 form-group">
        <input name="email" type="text" class="form-control" placeholder="信箱*">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
        <input name="website" type="text" class="form-control" placeholder="您的網站">
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
        <textarea name="comment" class="form-control" placeholder="留言*"></textarea>
        </div>
    </div>

    <div class="col form-group">
    <input name="pid" type="hidden" class="form-control" value="{{$post -> id}}">
    </div>


    <button type="submit" class="btn btn-primary">發表</button>

    </form>

</div>