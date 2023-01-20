<?php

    $layout = new Layout();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Abbia Casa - </title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cor1: '#434445',
                        cor2: '#CEAF94',
                        cor3: '#FEF5ED',
                        cor4: '#FCCD7E',
                        cor5: '#F8FFDE',
                        cor6: '#EE705A',
                    },
                    fontSize: {
                        s1: "66px",
                        s2: "55px",
                        s3: "33px",
                        s4: "30px",
                        s5: "20px",
                        s6: "18px",
                        s7: "14px",
                        s8: "12px",
                    },
                    fontFamily: {
                        agrandir: ['agrandir'],
                        romie: ['romie'],
                    }
                }
            }
        }
    </script>
</head>

<body>

<div class="flex justify-center items-center w-full h-[100vh]">
    <img class="w-[250px]" src="<?php echo  $layout->getFile('/assets/logo/AbbiaCasa-04.svg') ?>" alt="Abbia Casa">
</div>

</body>

</html>