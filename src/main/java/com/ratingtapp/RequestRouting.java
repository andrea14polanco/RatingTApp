package com.ratingtapp;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class RequestRouting {
		
	 @GetMapping({
         "/RatingTApp/Profesores**",
         "/RatingTApp/Home**"
     })
     public String index() {
         return "forward:/RatingTApp/index.html";
     }
	
}
