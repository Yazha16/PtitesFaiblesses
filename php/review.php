<?php

require('fcts_connect.php');

echo'<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">';
							$idc=connect();
							//print ($admin);
							$sql='SELECT * FROM avis where avis_num = 1';
							$rs=pg_exec($idc,$sql);

							while($ligne=pg_fetch_assoc($rs)) {
								print('
									<div class="carousel-item text-center active">
										<div class="img-box p-1 border rounded-circle m-auto">
											<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
										</div>
										<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">'.$ligne['avis_prenom'].' '.$ligne['avis_nom'].'</strong></h5>
										');
                                        for ($i=1; $i < $ligne['avis_note'] + 1; $i++) { 
                                            echo'<span class="fa fa-star checked"></span>';
                                        }
                                        print('
										<p class="m-0 pt-3">'.$ligne['avis_descrip'].'</p>
									</div>');
                                    
							} 
                            $sql='SELECT * FROM avis where avis_num != 1';
							$rs=pg_exec($idc,$sql);

							while($ligne=pg_fetch_assoc($rs)) {
								print('
									<div class="carousel-item text-center">
										<div class="img-box p-1 border rounded-circle m-auto">
											<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
										</div>
										<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">'.$ligne['avis_prenom'].' '.$ligne['avis_nom'].'</strong></h5>
										');
                                        for ($i=1; $i < $ligne['avis_note'] + 1; $i++) { 
                                            echo'<span class="fa fa-star checked"></span>';
                                        }
                                        print('
										<p class="m-0 pt-3">'.$ligne['avis_descrip'].'</p>
									</div>');
							} 
                        echo'
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>';

?>