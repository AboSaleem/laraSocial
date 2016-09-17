                <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                       <textarea name="post" class="form-control" id=""  rows="3"></textarea>
                     </div>
                     <input id="input-1" type="file"  name="file" class="form-control">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="media_type" value="video">
                       <button type="submit" class="btn btn-primary">Add New Post</button>

                </form>