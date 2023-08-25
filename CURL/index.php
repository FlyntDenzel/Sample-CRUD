<?php
             // working with server tools


         //a resource is a variable obtained from a url
        $url = 'https://jsonplaceholder.typicode.com/users';

        $resource = curl_init($url);
        // //curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);: 
        // This line sets a cURL option using the curl_setopt() function. 
        // It configures the cURL session represented by $resource to return the response directly instead of outputting it to the browser. 
        // The CURLOPT_RETURNTRANSFER constant is used to specify this option, and true is passed as the value.
        curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($resource);
        // echo $result; 

        $user = [
            'name' => 'Nchang Denzel',
            'username' => 'Flyntman',
            'email' => 'flyntdenzel2004@gmail.com'
        ];

        // creating a post request
        $resource = curl_init();

            curl_setopt_array($resource, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => ['content-type: application/json'],
                CURLOPT_POSTFIELDS => json_encode($user)
            ]);

        $result = curl_exec($resource);
        curl_close($resource);

        echo $result;

        // this code creates a cURL session, sets the necessary options to perform a POST request with JSON data, sends the request to the specified URL, 
        // captures and stores the response, and then closes the cURL session.
?>


       