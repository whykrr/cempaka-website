import React from "react";
// import { Link } from "react-router-dom";
import AppContent from "../component/AppContent";
import AppFooter from "../component/AppFooter";
import AppHero from "../component/AppHero";
import AppHeader from "../component/AppNavbar";

const LandingPage = () => {
    return (
        <>
            <AppHeader></AppHeader>
            <AppHero></AppHero>
            <AppContent></AppContent>
            <AppFooter></AppFooter>
        </>
    )
}

export default LandingPage;
