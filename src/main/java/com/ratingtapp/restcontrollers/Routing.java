package com.ratingtapp.restcontrollers;

import java.io.Serializable;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class Routing implements Serializable{
	@RequestMapping({
        "/Profesores/**",
        "/Home/**",
				"/About"
    })
    public String index() {
        return "forward:/index.html";
    }
}
