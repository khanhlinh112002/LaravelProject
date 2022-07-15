import React, { useState, useEffect } from "react";
import "./App.css";
import axios from "axios";
import ShowProduct from "./Components/ShowProduct";
import Search from "./Components/Search";

export default class App extends React.Component {
  render(){
    return(
      <div>
      {/* <Search></Search> */}
      <ShowProduct></ShowProduct>
      </div>
    )
  }
}