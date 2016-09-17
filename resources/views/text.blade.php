                <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                       <textarea name="post" class="form-control" id=""  rows="3"></textarea>
                     </div>
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <button type="submit" class="btn btn-primary">Add  New Post</button>

                </form>