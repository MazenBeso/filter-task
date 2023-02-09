<?php

$files = scandir("C:\Users\AbsyAmr\Desktop\Course\Prepare\assets\images");
shuffle($files);
foreach ($files as $file) {
	if (str_contains($file, "_")) {
		$name = explode("_", $file);
		$brand = $name[0];
		if ($brand == "Muhammad") {
			continue;
		}
		$dotPosition = strpos($name[1], ".");
		$numPosition = $dotPosition - 1;
		$type = substr($name[1], 0, $numPosition);

		$country = "";

		$countries = [
			"audi" => "germany",
			"bmw" => "germany",
			"ferrari" => "italy",
			"ford" => "america",
			"honda" => "japan",
			"hyundai" => "south_korea",
			"lamborghini" => "italy",
			"maserati" => "italy",
			"mazda" => "japan",
			"mercedes" => "germany",
			"toyota" => "japan",
			"cadillac" => "america",
			"tesla" => "america"
		];

		$country = $countries[$brand];

		$stars = rand(1, 5);

		?>
            <div class="spare-item <?php echo $brand . " " . $type . " " . $country ?>">
                <div class="position-relative w-100 h-100">
                    <h3 class="name text-center"><?php echo ucfirst($brand . " " . $type) ?></h3>
                    <div class="image">
                        <img src="assets/images/<?php echo $file ?>" alt="">
                    </div>
                    <div class="position-absolute tape">
                        <?php echo ucfirst($country) ?>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="price">
                            <i class="fa fa-dollar"></i> 300.00
                        </div>
                        <div class="stars">
                        	<?php
                        	for($i = 0; $i < $stars; $i++) {
                        		?>
		                            <i class="fa-solid fa-star"></i>
                        		<?php
                        	}

                        	for($i = 0; $i < 5 - $stars; $i++) {
                        		?>
		                            <i class="fa-regular fa-star"></i>
                        		<?php
                        	}
                        	?>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn btn-outline-success">Details</a>
                        <a href="#" class="btn btn-outline-secondary">Add to Cart</a>
                    </div>
                </div>
            </div>

		<?php		
	}
}
