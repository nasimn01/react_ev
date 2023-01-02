import React,{ useEffect, useState }  from 'react';
import axios from 'axios';



function HeroSection() {
	const [hero, setHeros] = useState([])

    useEffect(()=>{
        fetchHeros() 
    },[])

    const fetchHeros = async () => {
        await axios.get(`http://localhost:8000/api/header`).then(({data})=>{
            setHeros(data)
        })
    }
  return (
    <section class="hero-section set-bg" style={{ backgroundImage:"url(fassets/img/bg.jpg)"}}>
		<div class="container">
			<div class="hero-text text-white">
			{
                hero.length > 0 && (
                hero.map((row, key)=>(
                    <div key={key}>
                        <h2>{row.title}</h2>
						<p>{row.short_text}</p>
					</div>
                    ))
                )
            }	
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter text-center">
						
                        <a className='site-btn' href="#">Get Started</a>
					</form>
				</div>
			</div>
		</div>
	</section>
  )
}

export default HeroSection