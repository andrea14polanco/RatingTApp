package com.ratingtapp;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class RequestRouting {
		
	 @RequestMapping({
         "/Profesores/**",
         "/Home/**"
     })
     public String index() {
         return "forward:/index.html";
     }
	
}
