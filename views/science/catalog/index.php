<?php include_once ROOT . '/views/layouts/header.php'; ?>
<div class="labmerg">   
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="back_white smallpad">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <hr/>
                    <ul class="nav nav-pills nav-stacked">  
                        <li role="presentation" class="active">
                            <a href="/Science/lab">  Все <span class="badge"><?php echo $count['count(id)']; ?> </span></a>
                        </li>
                        <?php foreach ($categories as $categoryItem): ?>
                            <li role="presentation">
                                <a href="/Science/lab/<?php echo $categoryItem['id'] ?>"> 
                                    <?php echo $categoryItem['name'] ?>
                                    <span class="badge"> <?php echo $categoryItem['count']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul> 
                </div>
            </div>      
            <div class="col-sm-9 ">
                <div class="back_white smallpad leftmerg marg_bot">
                <div class="row">
                    <?php foreach ($labList as $labItem): ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">   
                                <div class="image-hover img-zoom-in">
                                <a  href="/Science/lab/<?php echo $labItem['category_id'] . '/' . $labItem['id'] ?>">
                                    <img  src=<?php echo "/upload/lab/img/{$labItem['id']}_1.jpg" ?> alt="">
                                </a>
                                </div>     
                                <div class="caption">
                                    <h3 class="center"> <?php echo $labItem['name'] ?>  </h3>
                                    <p><?php echo $labItem['short_description'] ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> 
                </div>
            </div>
        </div> 
    </div>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'; ?>