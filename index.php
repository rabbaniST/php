<?php 

$data = [
    [
        'class' => 'Class One',
        [
            'section' => [
                'name' => 'Section A',
                'student' => ['Sujon', 'Raj', 'Yamin', 'Shamin', 'Rabbi']
            ]
        ],
        [
            'section' => [
                'name' => 'Section B',
                'student' => ['Rahul', 'Joy', 'Shanin', 'Tonmoy', 'Rofiq', ]
            ]
        ],
        [
            'section' => [
                'name' => 'Section C',
                'student' => ['Rahim', 'Karim', 'Robin', 'Yasin', 'Ratul']
            ]
        ]
            ],
            [
        'class' => 'Class Two',
        [
            'section' => [
                'name' => 'Section A',
                'student' => ['Sujon', 'Raj', 'Yamin', 'Shamin', 'Rabbi']
            ]
        ],
        [
            'section' => [
                'name' => 'Section B',
                'student' => ['Rahul', 'Joy', 'Shanin', 'Tonmoy', 'Rofiq', ]
            ]
        ],
        [
            'section' => [
                'name' => 'Section C',
                'student' => ['Rahim', 'Karim', 'Robin', 'Yasin', 'Ratul']
            ]
        ]
            ],
            [
        'class' => 'Class Three',
        [
            'section' => [
                'name' => 'Section A',
                'student' => ['Sujon', 'Raj', 'Yamin', 'Shamin', 'Rabbi']
            ]
        ],
        [
            'section' => [
                'name' => 'Section B',
                'student' => ['Rahul', 'Joy', 'Shanin', 'Tonmoy', 'Rofiq', ]
            ]
        ],
        [
            'section' => [
                'name' => 'Section C',
                'student' => ['Rahim', 'Karim', 'Robin', 'Yasin', 'Ratul']
            ]
        ]
            ],
];
// echo '<pre>';

// foreach ($data as $classes){
//     foreach($classes as $class_name => $class){
//         if(is_array($class)){
//             foreach($class as $sections){
//                foreach($sections as $section){
//                 if(is_array($section)){
//                     foreach($section as $student){
//                         echo '<p>' . $student . '</p>';
//                     }
//                 }else{
//                     echo '<h3>' . $section . '</h3>';
//                 }
//             }
//         }
//     }else{
//         echo '<h2>' . $class . '</h2>';
//     }
// }
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="row justify-content-center">
        <?php foreach ($data as $classes){ ?>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <?php foreach($classes as $class_name => $class){
                        if(!is_array($class)){ ?>

                    <div class="card-header">
                        <h4><?php echo $class ?></h4>
                        </div>
                    <div class="card-body">
                         <div class="row">
                            <?php 
                            }else{
                            foreach($class as $sections){ ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <?php foreach($sections as $section){
                                       if(!is_array($section)){?>
                                    <div class="card-header">
                                        <h5><?php echo $section ?></h5>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="card-body">
                                        <ol>
                                        <?php foreach($section as $student){?>
                                            <li> <?php echo $student ?></li>
                                        <?php 

                                        }?>
                                        </ol>
                                    </div>
                                    <?php }}?>
                                </div> 
                            </div>
                                <?php }}} ?>
                         </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
  </div>
  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>