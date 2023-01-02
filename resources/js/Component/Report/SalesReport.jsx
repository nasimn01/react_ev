import React,{ useEffect, useState }  from 'react';
import axios from 'axios';

export default function Stock(){
    const [products, setProducts] = useState([])

    useEffect(()=>{
        fetchProducts() 
    },[])

    const fetchProducts = async () => {
        await axios.get(`http://localhost:8000/api/salreport`).then(({data})=>{
            setProducts(data)
        })
    }
    return(
        <div className="container">
          <div className="row">
            <div className="col-12">
                <div className="card card-body">
                    <div className='text-center'>
                        <h4>Sales Report</h4>
                    </div>
                    <div className="table-responsive">
                        <table className="table table-bordered mb-0 text-center">
                            
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Sub Amount</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    products.length > 0 && (
                                        products.map((row, key)=>(
                                            <tr key={key}>
                                                <td>{row.product_id}</td>
                                                <td>{row.quantity}</td>
                                                <td>{row.unit_price}</td>
                                                <td>{row.sub_amount}</td>
                                                <td>
												{Math.round(row.quantity * row.unit_price)}
                                                </td>
                                            </tr>
                                        ))
                                    )
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
    );
}