[![wercker status](https://app.wercker.com/status/f0d86138ad4234bf0dcf42597bebc088/s/master "wercker status")](https://app.wercker.com/project/byKey/f0d86138ad4234bf0dcf42597bebc088)

PHP Development Kit

Example:
 - collection

        $collection = new TList(A::class);
        $collection = new TVector(A::class, [...]);
        $collection = TList::new(A::class, [...]);

 - array

       $array = (new TArray(['1', '2', '3']))->map(function() {
             //foreach
       });

       $array = (new TArray(['1', '2', '3']))->filter(function() {
             //foreach
       });
