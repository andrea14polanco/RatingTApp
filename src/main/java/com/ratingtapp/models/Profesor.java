package com.ratingtapp.models;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="PROFESOR")
public class Profesor {
	
	@Id
	
	@Column(name="ID")
	private Long id;
	
	@Column(name="RATING")
	private Double rating;
	
	@Column(name="NOMBRE_PROFESOR")
	private String nombreProfesor;
	
	
	/*@OneToOne
	 * @Column(name = "AREA_ID")
	 * 
	 * private Area areaProfesor;
	 * 
	 * 
	 * */
	
	
	
	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public Double getRating() {
		return rating;
	}

	public void setRating(Double rating) {
		this.rating = rating;
	}

	public String getNombreProfesor() {
		return nombreProfesor;
	}

	public void setNombreProfesor(String nombreProfesor) {
		this.nombreProfesor = nombreProfesor;
	}
	
	

	
}
