gsap.from(".page1 h1",{
    x:50,
    duration:1,
    opacity:"0"
});
gsap.from(".page1 .cover #img",{
    y:50,
    duration:1,
    opacity:"0",
    stagger:.3
});
gsap.from(".page1 .cover .img4",{
    y:50,
    duration:.3,
    opacity:"0",
    scrollTrigger:{
        trigger:".page1 .cover .img3 ",
        scroller:"body",
        start:"top 60%",
        end:"top 50%",
        // scrub:1,
        // markers:true
    }
});
gsap.to(".page1 .h1 h1",{
    x:"-110%",
    duration:9,
    // opacity:0,
    scrollTrigger:{
        trigger:".page1 .h1 ",
        scroll:"body",
        start:"top 0%",
        end:"top -180%",
        pin:true,
        scrub:1,
        // markers:true
    }
});
gsap.to(".cover",{
    y:"-100%",
    // duration:5,
    scrollTrigger:{
        trigger:".page1",
        scroll:"body",
        start:"top 0%",
        end:"top -80%",
        pin:true,
        scrub:1,
        // markers:true
    }
});

gsap.from(".page2 h2",{
   x:80,
   duration:.5,
   opacity:0,
   scrollTrigger:{
    trigger:".page2",
    scroller:"body",
    start:"top 70%",
    end:"top 40%",
    scrub:1,
    // markers:true
   }

});
gsap.from(".page2 h3",{
    x:-90,
    duration:.5,
    opacity:0,
    scrollTrigger:{
        trigger:".page2",
        scroller:"body",
        start:"top 68%",
        end:"top 40%",
        scrub:1,
        // markers:true
       }
 });

 gsap.to(".page3 .img",{
    x:-90,
    duration:.5,
    // opacity:0,
    scrollTrigger:{
        trigger:".page3",
        scroller:"body",
        start:"top 80%",
        end:"top 10%",
        scrub:1,
        // markers:true
       }
 });

