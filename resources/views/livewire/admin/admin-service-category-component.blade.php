<div>
        <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
        <div class="container">
        <h1>Service Categories</h1>
        <div class="crumbs">
        <ul>
        <li><a href="/">Home</a></li>
        <li>/</li>
        <li>Service Categories</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        <section class="content-central">
        <div class="content_info">
        <div class="paddings-mini">
        <div class="container">
        <div class="row portfolioContainer">
        <div class="col-md-12 profile1">
         <table class="table table-striped table-bordered table-hover">
       <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>slug</th>
                <th>Image</th>
            </tr>
       </thead>
       <tbody>
           @foreach ($categories as $category)
           <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td><img src="{{asset('images/categories')}}/{{$category->image}}" width="50" height="50"></td>
        </tr>
           @endforeach
       </tbody>
         </table>
         {{$categories->links()}}
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</div>
