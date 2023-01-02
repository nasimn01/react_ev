import React,{ useEffect, useState }  from 'react';
import axios from 'axios';


function Header() {
	const [head, setHeads] = useState([])

    useEffect(()=>{
        fetchHeads() 
    },[])

    const fetchHeads = async () => {
        await axios.get(`http://localhost:8000/api/header`).then(({data})=>{
            setHeads(data)
        })
    }
  return (
    <header className="header-section">
		<div className="container">
			<div className="row">
				<div className="col-lg-3 col-md-3">
					<div className="site-logo">
						<img src="fassets/img/logo.png" alt="logo"/>
					</div>
					<div className="nav-switch">
						<i className="fa fa-bars"></i>
					</div>
				</div>
				<div className="col-lg-9 col-md-9">
					<a href="" className="site-btn header-btn">Login</a>
					<nav className="main-menu">
					{
                        head.length > 0 && (
                            head.map((row, key)=>(
                                <ul key={key}>
                                    <li><a href="index.html">{row.menu_1}</a></li>
                                    <li><a href="#">{row.menu_2}</a></li>
                                    <li><a href="#">{row.menu_3}</a></li>
                                    <li><a href="#">{row.menu_4}</a></li>
                                    <li><a href="#">{row.menu_5}</a></li>


								</ul>
                            ))
                        )
                    }
						
					</nav>
				</div>
			</div>
		</div>
	</header>
  )
}

export default Header