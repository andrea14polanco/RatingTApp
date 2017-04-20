package com.ratingtapp.restcontrollers;

import org.springframework.data.repository.CrudRepository;
import org.springframework.data.rest.core.annotation.RepositoryRestResource;

import com.ratingtapp.models.Profesor;




@RepositoryRestResource(path = "profesor",collectionResourceRel = "profesor")
public interface ProfesorDao  extends CrudRepository<Profesor, Long>{
		
}
