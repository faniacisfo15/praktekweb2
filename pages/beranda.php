
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
                <?php foreach ($isi_berita as $ib) { 
                    ?>
                    
                <h2>
                    <a href="#"><?php echo $ib['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $ib ['tanggal'] ?></p>
                <hr>
                <p><?php echo $ib['isi'] ?></p>
                
                <?php } ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>