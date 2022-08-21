import React from "react";
import { Link } from "react-router-dom";

const AppHeader = () => {
    return (
        <>
            <header id="header" className="d-flex align-items-center">
                <div className="container d-flex align-items-center">

                    <h1 className="logo me-auto"><Link to="index.html">Green</Link></h1>
                    <nav id="navbar" className="navbar">
                        <ul>
                            <li><a className="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a className="nav-link scrollto" href="#about">About</a></li>
                            <li><a className="nav-link scrollto" href="#services">Services</a></li>
                            <li><a className="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                            <li><a className="nav-link scrollto" href="#team">Team</a></li>
                            <li className="dropdown"><Link to="#"><span>Drop Down</span> <i className="bi bi-chevron-down"></i></Link>
                                <ul>
                                    <li><Link to="#">Drop Down 1</Link></li>
                                    <li className="dropdown"><Link to="#"><span>Deep Drop Down</span> <i className="bi bi-chevron-right"></i></Link>
                                        <ul>
                                            <li><Link to="#">Deep Drop Down 1</Link></li>
                                            <li><Link to="#">Deep Drop Down 2</Link></li>
                                            <li><Link to="#">Deep Drop Down 3</Link></li>
                                            <li><Link to="#">Deep Drop Down 4</Link></li>
                                            <li><Link to="#">Deep Drop Down 5</Link></li>
                                        </ul>
                                    </li>
                                    <li><Link to="#">Drop Down 2</Link></li>
                                    <li><Link to="#">Drop Down 3</Link></li>
                                    <li><Link to="#">Drop Down 4</Link></li>
                                </ul>
                            </li>
                            <li><a className="nav-link scrollto" href="#contact">Contact</a></li>
                            <li><a className="getstarted scrollto" href="#about">Get Started</a></li>
                        </ul>
                        <i className="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                </div>
            </header>
        </>
    );
}

export default AppHeader;