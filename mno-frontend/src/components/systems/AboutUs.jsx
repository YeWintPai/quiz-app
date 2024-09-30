import React from "react";
import TopNav from "../layout/TopNav";

const AboutUs = () => {
    return (
        <TopNav>
            <div className="text-center">
                <h1 className="text-gray-800 text-4xl font-logo mt-16">
                    &lt;CodeCrafters Quiz/&gt;
                </h1>
                <p className="text-gray-800 text-2xl mx-20 mt-9 px-80 py-5">
                    This is where you can challenge your coding skills with fun,
                    engaging quizzes and level up your programming knowledge!
                </p>
            </div>
            <div className="items">
                <h1 className="title">Meet Our Team</h1>
                <div className="titleBox">
                    <img
                        className="w-24 md:w-48 my-10 md:my-5 md:mx-10 sm:mx-6"
                        src="/src/assets/Images/Profiles/et.png"
                        alt="Ei Thiri Aung"
                    />
                    <img
                        className="w-24 md:w-48 my-10 md:my-5 md:mx-10 sm:mx-6"
                        src="/src/assets/Images/Profiles/kyukyuthin.png"
                        alt="Kyu Kyu Thin"
                    />
                    <img
                        className="w-24 md:w-48 my-10 md:my-5 md:mx-10 sm:mx-6"
                        src="/src/assets/Images/Profiles/mrat.png"
                        alt="Mrat Naing Oo"
                    />
                    <img
                        className="w-24 md:w-48 my-10 md:my-5 md:mx-10 sm:mx-6"
                        src="/src/assets/Images/Profiles/Paing ag khant.png"
                        alt="Paing Aung Khant"
                    />
                    <img
                        className="w-24 md:w-48 my-10 md:my-5 md:mx-10 sm:mx-6"
                        src="/src/assets/Images/Profiles/thurein soe.png"
                        alt="Thurein Soe"
                    />
                    <img
                        className="w-24 md:w-48 my-10 md:my-5 md:mx-10 sm:mx-6"
                        src="/src/assets/Images/Profiles/yewintpaingmyelaung.png"
                        alt=""
                    />
                </div>
            </div>
            <div className="items">
                <h1 className="title">Contact Us</h1>
                <div className="titleBox">
                    <a href="https://www.facebook.com/codemalmyanmar?mibextid=ZbWKwL">
                        <img
                            src="/src/assets/Images/ContactLogos/Facebook.png"
                            className="imgItem"
                            alt="Facebook"
                        />
                    </a>
                    <a href="https://t.me/codemalcommunity/1463">
                        <img
                            src="/src/assets/Images/ContactLogos/Telegram.png"
                            className="imgItem"
                            alt="Telegram"
                        />
                    </a>
                    <a href="https://discord.com/invite/vBVAEvwQ">
                        <img
                            src="/src/assets/Images/ContactLogos/Discord.png"
                            className="imgItem"
                            alt="Discord"
                        />
                    </a>
                </div>
            </div>
        </TopNav>
    );
};

export default AboutUs;
