<?php
return [	
		//应用ID,您的APPID。
		'app_id' => "2016100100638388",
		'seller_id'=>'2088102178083675',

		//商户私钥
		'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCXlBkesoVyqsizpXUTIBT+fYpxFTPZDgI2vNmHq8ug3/Zq5+Fe10q/CiDGZ2NBQgTPzc+wshjaC6Z2S4LbnHI1fe/dwHMkEJ+oslNt8c5EAEBFpnhiBLNDYJKu0FFMfa2l/wmQOKlmSwtzp3UcdN4ecwWH+4xU5Xadu6+mDNTOXP50KIM+MH61oFeYyfmJ98izTWrgZ96MPOxWsVSrsQtfE1pPJk2FBzlKb8Y1ueWsMvIf9juKtOlCrTLJ9Ug48WGIZurbBAQBF4tF0iA+zzm7m80ztUgSud71PQS/0ApFtq0CB3lSKaG5xl61KxiK/y1JbVtq+v5URsMbyfkpG74hAgMBAAECggEARRStzhu2TegfyB/kF29LoiA89AShuI5129R9nyNgjlUDzP0Y7UxZOG+5ODLuPVOFNd+qg/Dm+pjMqKUJYmUOd+qJYxrOXuVknlGHTFgjlUI4CIYx3xodSNu+fgVax+2PMlPlW+E28vPIqFDtQqbQhDgPkUXHUvmw8XoUNy0p31I2SD58jihOraXQRVX/BBcrq7b/zz1NUsKZ9Dhlo4353APQpTZ087ASJQz3usushqsvlzg9VpP7EBVAfmYqqeMYShcBZBqFCxoHkiKA/pi/GmxuTV5xC7VQeuvvqSU/vDtMB+TvZMtlCZM6PhsFwnrrQ3mGOM2WqSqJTOBSCUZZAQKBgQDWFfWeCFjPrENQ9QLwYHUjIsdHIuBUsJMjv/yayh/619c/ZYHH4Stq52JP3LKlZjQEBHia2Dpef3uHsS+x44Ttf6kPA8J9u/xeFWBPoWcunLrm+kVIrKaWpV9AVNNfG8zDzEPB2PYZjHrtfQBC1EMBYlZ5+7keZQnypi2BB4YCiQKBgQC1QUGhdZHFaErFMtNxkupbwp/kH759wVVnb/qdmNprrD9SeoBD3VgsazhGzDGqmlZepEk8mPW+zimJvcJAqDRy0vSvATh2sOdQ4K6KJsSqLAwxqx4ScTtTJM1BIm8RP9Rg1Z+WVxCL3w5QrBsH7WDSz9aDwBEXy0wnCDJM62DY2QKBgQCQJaMGsDoUQrnkpcQ/08KrULx7AlmnzGiWNqvAEX5s6K3OyusSiWMxjPBeM4y531IArn4CTLsoa4/icoRZs4cKXt2W9YIcJNotAxmhJF0UPoV+Bl9mKpHUdy7mYvcbX92ErGGnAQ3bcAJJK9RkKwWexfbSFZK0i3WiQw/6g/VQeQKBgQCr6ZPlHsy+rndUaCuSKiUsGQFr7gvP3KIzNEtAVKy9uSZqBRRIydSKdLtwstVcmXvX0fxAhFd4vLM7GIb4qlDso1c98Wtrb8hFtoT1NWYMfTCnn0Qre8gnyN0ArTco5iB6I8N0ZWmlME+0hjgxIZ1W9ZfhaDcOGV1GHAkRWaKGqQKBgErx/XfYoo10NgS16gPm+AdK9C4pjMSTGPKgfrGfG7msUDhnKn/WUKYbxC6nZwuKRdHB+Fd/JJunXbePlLzhKchXSsUvULJTnILKZ0TRGlKTawj3adUkvgqAfS1uNiXrGUJp3XEBUiBHZHCV5PqHPqsSdkb1Jb4ooXzVdsokhcm5",
		
		//异步通知地址
		'notify_url' => "http://39.96.23.242/notify_url.php",
		
		//同步跳转
		'return_url' => "http://www.1811word.com/returnpay",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB",
];