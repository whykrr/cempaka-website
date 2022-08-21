import React from "react";
import { Link } from "react-router-dom";

const AppFooter = () => {
    return (
        <>
            <footer id="footer">
                <div className="container">
                    <h3>Green</h3>
                    <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                    <div className="social-links">
                        <Link to="#" className="twitter"><i className="bx bxl-twitter"></i></Link>
                        <Link to="#" className="facebook" > <i className="bx bxl-facebook" ></i ></Link >
                        <Link to="#" className="instagram" > <i className="bx bxl-instagram" ></i ></Link >
                        <Link to="#" className="google-plus" > <i className="bx bxl-skype" ></i ></Link >
                        <Link to="#" className="linkedin" > <i className="bx bxl-linkedin" ></i ></Link >
                    </div >
                    <div className="copyright" >
                        & copy; Copyright <strong> <span>Green</span></strong>.All Rights Reserved
                    </div >
                    <div className="credits" >
                        Designed by <Link to="https://bootstrapmade.com/" > BootstrapMade</Link>
                    </div>
                </div>
            </footer>
        </>
    )
}

export default AppFooter;