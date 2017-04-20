package com.ratingtapp.restcontrollers;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ratingtapp.models.Profesor;

@RestController
public class Services {
		
	
		@Autowired
		private ProfesorDao pd;
	
	
	
		@GetMapping(path = "profesores")
		public List<Profesor> getListaPreofesores()
		{
			List<Profesor> listaP = new ArrayList<>();
			pd.findAll().forEach(listaP::add);
			
			return listaP;
			
		}
	
}
