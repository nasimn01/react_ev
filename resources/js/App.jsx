import React from 'react';
import { createRoot } from 'react-dom/client'
import Stock from './Component/Report/Stock';
import SalesReport from './Component/Report/SalesReport';
import PurchaseReport from './Component/Report/PurchaseReport';

export default function App(){
    return(
        <>
        <h1>Reports</h1>
        <Stock />
        <SalesReport />
        <PurchaseReport />
        </>
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}