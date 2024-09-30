import React from "react";
import TopNav from "../layout/TopNav";

const Question = () => {
    return (
        <TopNav>
            <article className="border rounded-md border-slate-500 px-5 mt-10 mx-32">
                <section className="flex flex-row justify-between items-center">
                    <p className="py-4">Question 1 of 5</p>
                    <a href="" className="w-5">
                        <img
                            src="/src/assets/Images/ContactLogos/Cancel.png"
                            alt=""
                        />
                    </a>
                </section>
                <section className="py-4">
                    <h3>What should be the first tag in any HTML document?</h3>
                    <ul>
                        <li>A. &lt;html&gt;</li>
                        <li>B. &lt;head&gt;</li>
                        <li>C. &lt;!DOCTYPE html&gt;</li>
                        <li>D. &lt;title&gt;</li>
                    </ul>
                </section>
                <section className="grid grid-cols-2 gap-5 my-5 justify-items-center">
                    <button
                        className="rounded-lg w-36 h-16 bg-gray-300 hover:bg-gray-600 text-gray-900"
                        type="submit"
                    >
                        A
                    </button>
                    <button
                        className="rounded-lg w-36 h-16 bg-gray-300 hover:bg-gray-600 text-gray-900"
                        type="submit"
                    >
                        B
                    </button>
                    <button
                        className="rounded-lg w-36 h-16 bg-gray-300 hover:bg-gray-600 text-gray-900"
                        type="submit"
                    >
                        C
                    </button>
                    <button
                        className="rounded-lg w-36 h-16 bg-gray-300 hover:bg-gray-600 text-gray-900"
                        type="submit"
                    >
                        D
                    </button>
                </section>
            </article>
            <section className="grid grid-cols-2 gap-5 my-10 justify-items-center">
                <button
                    className="rounded-lg w-24 h-10 bg-gray-300 hover:bg-gray-600 text-gray-900"
                    type="submit"
                >
                    Previous
                </button>
                <button
                    className="rounded-lg w-24 h-10 bg-gray-300 hover:bg-gray-600 text-gray-900"
                    type="submit"
                >
                    Next
                </button>
            </section>
        </TopNav>
    );
};

export default Question;
