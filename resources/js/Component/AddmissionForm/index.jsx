import React, {useState} from 'react';
import { createRoot } from 'react-dom/client';
import StudentService from '../../services/StudentService';

function addmission() {
  const [Patient, setPatient]= useState();
  const [Msg, setMsg]= useState();

    const handelInputChange = event =>{
        const {name, value} =event.target;
        setPatient({...Patient,[name]:value});
    }
    const savePatient= () =>{
      console.log(Patient)
        StudentService.create(Patient).then(res=>{
         setMsg(res.data);
        }).catch(e=>{
            console.log(e);
        });
    }
  return (
    <section className="search-section mt-5">
		<div className="container">
			<div className="search-warp">
				<div className="section-title text-white">
					<h2>Student Apply Form</h2>
				</div>
				<div className='p-2'>
				<p className='text-white'>{Msg}</p>
				</div>
        <form className="course-search-form bg-dark" method='get'>
          <div className="row">
            <div className="col-md-10 offset-md-1">
                <input type="text" name='name' onChange={handelInputChange} placeholder="Name"/>
                <input type="text" name='birth_date' className="last-m" onChange={handelInputChange} placeholder="Birth Date"/>
            </div>
          </div>
          <div className="row">
            <div className="col-md-10 offset-md-1">
                <input type="text" name='birth_certificate_no' className=" mt-2" onChange={handelInputChange} placeholder="Birth Certificate No"/>
                <input type="text" name='contact' className="last-m mt-2" onChange={handelInputChange} placeholder="Contact No"/>
            </div>
          </div>
          <div className="row">
            <div className="col-md-10 offset-md-1">
                <input type="email" name='email' className=" mt-2" onChange={handelInputChange} placeholder="Email Address"/>
                <input type="text" name='father' className="last-m mt-2" onChange={handelInputChange} placeholder="Father Name"/>
            </div>
          </div>
          <div className="row">
            <div className="col-md-10 offset-md-1">
                <input type="text" name='father_nid' className=" mt-2" onChange={handelInputChange} placeholder="Father's NID"/>
                <input type="text" name='mother' className="last-m mt-2" onChange={handelInputChange} placeholder="Mother Name"/>
                <button type='button' onClick={() => savePatient()} className="site-btn mt-2">Apply</button>
            </div>
          </div>
        </form>
			</div>
		</div>
	</section>
  )
}

export default addmission

if(document.getElementById('root')){
  createRoot(document.getElementById('root')).render(<App />)
}