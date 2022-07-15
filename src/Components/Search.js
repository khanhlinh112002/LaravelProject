import React, { useState, useEffect } from "react";
import axios from "axios";

function Search() {
  const [loading, setLoading] = useState(false);
  const [posts, setPosts] = useState([]);
  const [searchTitle, setSearchTitle] = useState("");

  useEffect(() => {
    const loadPosts = async () => {
      setLoading(true);
      const response = await axios.get(
        "http://127.0.0.1:8000/api/get-product"
      );
      setPosts(response.data);
      setLoading(false);
    };

    loadPosts();
  }, []);

  const test = (event) => 
    {
    let request = {
        params: {
            keyword: event.target.value
        }
    }
    axios.get('http://127.0.0.1:8000/api/test', request)
        .then((res)=>{
            // console.log(res.data);
            setPosts(res.data);
        })
    }


  return (
    <div className="App">
      <h3>Search Filter</h3>
      <input
        style={{ width: "30%", height: "25px" }}
        type="text"
        placeholder="Search..."
        onChange={(event) => test(event)}
      />
      <table className="w3-table-all"></table>
      {loading ? (
        <h4>Loading ...</h4>
      ) : (
        posts
          .filter((value) => {
            if (searchTitle === "") {
              return value;
            } else if (
              value.title.toLowerCase().includes(searchTitle.toLowerCase())
            ) {
              return value;
            }
          })
          .map((item) => <h5 key={item.id}>{item.name}</h5>)
      )}
    </div>
  );
}

export default Search;