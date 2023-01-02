import React from 'react';
import { createRoot } from 'react-dom/client'
import BannerSection from './Component/BannerSection';
import CourseSection from './Component/CourseSection';
import FooterSection from './Component/FooterSection';
import Header from './Component/Header';
import HeroSection from './Component/HeroSection';
import SignupSection from './Component/SignupSection';
import Category from './Component/Category';
import AddmissionForm from './Component/AddmissionForm';

const Home = () => {
  return (
    <div>      
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<Header/>
	
	<HeroSection/>
	<AddmissionForm/>
	<Category/>
	
	<section class="search-section">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2>Search your course</h2>
				</div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
					
						<form class="course-search-form">
							<input type="text" placeholder="Course"/>
							<input type="text" class="last-m" placeholder="Category"/>
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<CourseSection/>

    <SignupSection/>

	<BannerSection/>

	<FooterSection/> 

    </div>
  )
}

export default Home

if(document.getElementById('home')){
    createRoot(document.getElementById('home')).render(<Home />)
}